#!/bin/bash

echo $FLAG >> /flag

export FLAG=not_flag
FLAG=not_flag

echo $PASSWORD >> /init_password

export PASSWORD=not_flag
PASSWORD=not_flag

rm -f /flag.sh
