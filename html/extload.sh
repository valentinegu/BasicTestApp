#!/bin/bash
ab -p file -l -n 1000000 $1 &
