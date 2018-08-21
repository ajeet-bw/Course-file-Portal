import sys
from PyPDF2 import PdfFileMerger, PdfFileReader
merger = PdfFileMerger()
fil = open(sys.argv[1],'rb')
fil1= open(sys.argv[2],'rb')
o=PdfFileReader(fil)
o1=PdfFileReader(fil1)
a=int(sys.argv[3])
b=int(sys.argv[4])
c=int(sys.argv[5])
#merger.append(o,pages=0:3:1)
merger.merge(0,o,bookmark=None,pages=(0,a,1),import_bookmarks=True)
merger.merge(c,o1,pages=(0,b,1))
merger.write(sys.argv[1])
