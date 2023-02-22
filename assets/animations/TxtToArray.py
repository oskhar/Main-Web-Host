# Input file
nameFile = str(input("Masukan nama file: "))

# Manipulasi string
text = open(nameFile, "r")
text = text.read()
list = text.split("=====")
text = '[`{}`]'.format('`, `'.join(list))

# Masukan ke file output.txt
out = open("output.txt", "w")
out.write(text)
out.close()