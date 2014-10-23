# !/ bin / bash
# benchmark for running the 16 SQL scripts in SQLite that should reside in a zip in this same folder and 
# output 16 result files for each script.

for i in {1..16}; do
	echo $(/usr/bin/time -o result/sqlite/q$i.txt ./sqlite3 tests.db < query$i.sql)
done

