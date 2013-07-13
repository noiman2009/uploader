#/bin/sh
cd  /var/www/html/uploader/w2box_dev/data
for filename in *.zip
do 

if [[ $filename =~ .*\&.* ]];then
echo "$filename" "is skipped"
else
unzip -o "$filename"
fi
done
