import mysql.connector
import json

db_config = {
    "host": "172.17.0.2",
    "user": "root",
    "password": "salupa",
    "database": "webgis",
}


def get_db_connection():
    conn = mysql.connector.connect(**db_config)
    return conn


def execute_query(query, params=None, is_select=True):
    conn = get_db_connection()
    try:
        cur = conn.cursor()
        cur.execute(query, params)  # Parameters are passed here

        if is_select:
            result = cur.fetchall()
            cur.close()
            return result
        else:
            conn.commit()
            cur.close()
    finally:
        conn.close()


# Membuka dan membaca file JSON
with open("kampung.geo.json", "r") as file:
    data = json.load(file)

# Mengakses 'geometry' dan 'properties' dari feature tersebut
for feature in data["features"]:
    geometry = json.dumps(feature["geometry"])  # Convert geometry to JSON string

    # Mengakses distrik_id dan nama dalam 'properties'
    distrik_id = feature["kode_kec"]
    nama = feature["nama"]

    # Membuat query INSERT
    query = """
    INSERT INTO desas (distrik_id, nama_desa, peta_desa, created_at)
    VALUES
    (%s, %s, ST_GeomFromGeoJSON(%s), NOW())
    """

    # Parameter untuk query
    params = (distrik_id, nama, geometry)

    # Jalankan query INSERT
    execute_query(query, params, is_select=False)
