cat read_file.log | while read line
do
    if [[ $line == *"#ERROR#"* ]]; then
        echo $line >> error_read_file.log
    fi
done

# Esto solo es para ver como va quedando el fichero error_read_file.log luego de cada ejecución
cat error_read_file.log