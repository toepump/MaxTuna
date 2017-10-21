#!/bin/bash

#install git
#sudo apt-get install git

#install the necessary packages
#sudo apt-get install dnsmasq hostapd

#backup the original config file
sudo cp /etc/dhcpcd.conf /etc/dhcpcd.orig

#update the config file
var=`grep -n "interface" test | head -n 1 | cut -c1-1`
sed "${var} i denyinterfaces wlan0" test 

#update the network/interfaces file to setup static IP
#assume 192.168.50.1

#restart the dhcpcd
#sudo service dhcpcd restart

#reload the wlan0 configuration
sudo ifdown wlan0; sudo ifup wlan0

#configure the hostapd
#first create a hostapd

