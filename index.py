#!/usr/bin/python

# Turn on debug mode.
from collections import Counter, defaultdict

import cgitb
cgitb.enable()

# Print necessary headers.
print("Content-Type: text/html")
print()

# Connect to the database.
import pymysql
conn = pymysql.connect(
    db='sls_db',
    user='root',
    passwd='Son100480',
    host='localhost')
c = conn.cursor()

# Print the contents of the database.
c.execute("SELECT * FROM sls_db")


rows = c.fetchall()
s=("|--------------------------------------------------------------------------SQL DATABASE---------------------------------------------------------------------------------------------------------|\n")
s=s.replace("\n","<br />\n")
print(s)
s=('| id | node |       ipv6 addr, prefix: aaaa::0/64         |   connected | num_request | num_reply | time-out | last command | retries |      last_seen          | channel | RSSI/LQI  | PAN_ID | TX Power |\n')
s=s.replace("\n","<br />\n")
print(s)
s=('|-----|--------------|----------------------|-------------|-------------|-----------|----------|--------------|---------|-------------------------|----------|------------|--------|-------------|\n')
s=s.replace("\n","<br />\n")
print(s)

for row in rows:
	data = list(row)
	for j in range(0,22):
		print("| ", data[j], " ")
	print("| <br />\n")
s=('|-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|\n')
s=s.replace("\n","<br />\n")
print(s)
conn.close()