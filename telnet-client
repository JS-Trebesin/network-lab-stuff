import telnetlib
import time

HOST = "ubuntu-server-ip"
user = "j*****"
password = "necekane"

while True:
    try:
        tn = telnetlib.Telnet(HOST, 23, timeout=10)
        tn.read_until(b"login: ")
        tn.write(user.encode('ascii') + b"\n")
        tn.read_until(b"Password: ")
        tn.write(password.encode('ascii') + b"\n")
        time.sleep(5)
        tn.close()
    except Exception as e:
        print("Connection failed:", e)
        time.sleep(5)
