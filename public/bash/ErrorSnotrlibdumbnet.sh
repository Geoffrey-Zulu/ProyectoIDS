#Carlos 1Ruiz
#!/bin/bash
sudo apt-get install automake
sudo apt-get install dh-autoreconf
sudo apt-get install -y libdumbnet-dev

if [ $? -eq 0 ]
  then 
    exit 0
  else
    echo 'ERROR'    
fi