# Just a simple python script to add some needed info for SQL

a = open("insulin_compare.csv", "r")
b = open("insulin_compare.sql", "w")
c = open("seq.csv", "r")
d = open("insulin_seq.sql", "w")
e = open("proteins.csv", "r")
f = open("insulin_proteins.sql", "w")
line = a.readline()
while (line):
    b.write("INSERT INTO insulin_compare VALUES(" + line.rstrip() + ");\n")
    line = a.readline()
line = c.readline()
while (line):
    d.write("INSERT INTO insulin_seq VALUES(" + line.rstrip() + ");\n")
    line = c.readline()
line = e.readline()
while (line):
    f.write("INSERT INTO insulin_proteins VALUES(" + line.rstrip() + ");\n")
    line = f.readline()
a.close()
b.close()
c.close()
d.close()
e.close()
f.close()
