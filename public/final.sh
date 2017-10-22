#!/bin/sh
sudo rm -f /etc/wpa_supplicant/wpa_supplicant.conf
sudo cp supp.conf /etc/wpa_supplicant/wpa_supplicant.conf
sudo ~/connect.sh
