#!/bin/sh

for f in about \
admision01 \
admision1 \
admision2 \
arts \
awards \
contact \
donors \
faqs \
gallery \
header \
index \
instrument \
learningcenter \
occupational \
ourschool2 \
payfees \
samyukt \
schoolsong1 \
schoolsong \
servicestabs \
skill \
specialneeds \
speech \
StaffandTeacher \
teachertraining; do 

cat header $f footer > ../$f.html

done

