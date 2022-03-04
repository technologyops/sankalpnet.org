#!/bin/sh

# extract filenames from extensions
# for f in *.html;do mv $f ${f%.*}; done

for f in about \
admision01 \
admision1 \
admision2 \
annaual \
articlesandsucessstory \
arts \
awards \
comingsoon \
contact \
donors \
faqs \
gallery \
header \
index \
instrument \
learningcenter \
news \
occupational \
ourschool2 \
payfees \
researchpaper \
samyukt \
schoolsong1 \
schoolsong \
servicestabs \
skill \
specialneeds \
speech \
StaffandTeacher \
teachertraining; do 

if [ -f $f ]; then
  cat header $f footer > ../$f.html
fi

done

