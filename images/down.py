import sys
from PyPDF2 import PdfFileMerger, PdfFileReader
merger = PdfFileMerger()
a=sys.argv[1]+".pdf"
merger.write(a)
