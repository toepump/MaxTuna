#!/bin/bash

#install the necessary packages
sudo apt-get install dnsmasq hostapd

#backup the original config files
sudo cp /etc/dhcpcd.conf /etc/dhcpcd.old
sudo cp /etc/network/interfaces /etc/network/interfaces.old

#update the config file


#update the network/interfaces file to setup static IP
#assume 192.168.50.1


#restart the dhcpcd
sudo service dhcpcd restart

#reload the wlan0 configuration
sudo ifdown wlan0; sudo ifup wlan0

#configure the hostapd
#first create a hostapd
curl -O https://raw.githubusercontent.com/toepump/MaxTuna/master/hostapd.conf
