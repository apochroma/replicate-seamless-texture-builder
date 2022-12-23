import replicate
import datetime
import mysql.connector

myprompt = input("Enter my own prompt: ")

#Create timestamp
timestamp = datetime.datetime.now()
print(timestamp)

model = replicate.models.get("tommoore515/material_stable_diffusion")
version = model.versions.get("3b5c0242f8925a4ab6c79b4c51e9b4ce6374e9b07b5e8461d89e692fd0faa449")
# output = version.predict(prompt="roasted coffee beans")
output = version.predict(prompt=myprompt)

#Create new css file
f = open("./pattern-animation-infinite/dist/link.css", "w")
f.write(".bg-scroll {background: url(" + output[0] +") repeat;}")
f.close()

print(output[0])

# save to Database
mydb = mysql.connector.connect(
  host="bildstrecke.ch",
  user="aigenerator",
  password="5_Je8cx69",
  database="apochro_bildstrecke"
)

mycursor = mydb.cursor()

sql = "INSERT INTO image (prompt, link, timestamp ) VALUES (%s, %s, %s)"
val = (myprompt, output[0], timestamp)
mycursor.execute(sql, val)

mydb.commit()

print(mycursor.rowcount, "record inserted.")

