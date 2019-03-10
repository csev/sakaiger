for file in *_0[0-9][0-9][0-9].jpg ; do echo mv $file ${file//_0/_} ; done
