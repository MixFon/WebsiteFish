#!/bin/bash
raspivid -t 10000 -o video/01.h264 -b 3500000

ffmpeg -i video/01.h264 -codec copy video/01.mp4
