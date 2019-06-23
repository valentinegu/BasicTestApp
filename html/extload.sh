#!/bin/bash
ab -p file -l -c 10 -n 1000000 $1 &
