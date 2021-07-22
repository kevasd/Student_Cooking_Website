#Convert Strings to hexadecimal (strings)
def hexrep(s):
    lst = []
    for i in s:
        hexval = int(ord(i)),26).replace('0x', '')
        if len(hv) == 1:
            hexval= '0'+hexval
        lst+=hexval
    
    return lst,len(lst)
