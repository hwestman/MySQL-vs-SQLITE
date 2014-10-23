# !/ bin / bash
# benchmark for running the 16 SQL scripts in MySQL that should reside in a zip in this same folder and 
# output 16 result files for each script.

for i in {1..16}; do
	echo $(/usr/bin/time -o result/mysql/q$i.txt mysql BENCHMARK < query$i.sql)
done

