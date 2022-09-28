import requests
import simplejson as json

url = "https://api.thingspeak.com/channels/1690416/field/1.json?api_key=FZIL8M50MEF4E0M4&results=100"

payload = ""
headers = {}

response = requests.request("GET", url, headers=headers, data=payload)

res = json.loads(response.text)

dados = res.get("feeds")

for i in dados:
    data = i["created_at"]
    arquivos = i["field1"]

    print("Data de recebidos", data, "Dados Coletados", arquivos)







