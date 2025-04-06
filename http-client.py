import requests
import time

url = "http://ubuntu-server-ip/somepage"
sensitive_data = {
    "username": "aaa",
    "password": "necekane",
    "ssn": "123-45-6789"
}

while True:
    try:
        r = requests.post(url, data=sensitive_data)
        print("Sent sensitive data, response:", r.status_code)
        time.sleep(5)
    except Exception as e:
        print("Failed to send:", e)
        time.sleep(5)
