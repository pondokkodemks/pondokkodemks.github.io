import requests

def get_github_json(url):
    response = requests.get(url)
    
    # Periksa apakah permintaan berhasil (status code 200)
    if response.status_code == 200:
        # Parse JSON dari respons
        data = response.json()
        return data
    else:
        # Tampilkan pesan kesalahan jika permintaan tidak berhasil
        print(f"Error {response.status_code}: {response.text}")
        return None

# Ganti URL dengan URL repository GitHub yang menyediakan data JSON
github_url = "https://pondokkodemks.github.io/data.json"

# Panggil fungsi dan terima data JSON
json_data = get_github_json(github_url)

# Gunakan data JSON sesuai kebutuhan Anda
if json_data:
    print(json_data)
    # Lakukan operasi lain dengan data JSON
else:
    print("Gagal mendapatkan data JSON dari GitHub.")
