import sys
from PyPDF2 import PdfFileMerger, PdfFileReader
merger = PdfFileMerger()
a=sys.argv[1]+".pdf"
fil = open(a,'rb')
fil1= open(sys.argv[2],'rb')
o=PdfFileReader(fil)
o1=PdfFileReader(fil1)
#merger.append(o,pages=0:3:1)
merger.merge(0,o,bookmark=None,pages=(0,o.numPages,1),import_bookmarks=True)
merger.merge(o.numPages,o1,pages=(0,o1.numPages,1))
merger.write(a)


