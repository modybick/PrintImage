import win32api
import win32print
import sys

import subprocess
import os
from PIL import Image
import sys
import io
import math

#引数としてファイルパスを受け取る
args = sys.argv
filePath = args[1]

print(filePath)
#画像展開用のメモリを確保

#画像をリサイズ
img = Image.open(filePath)

#サイズを取得してリサイズの倍率を決める
box_size = (1520 * 2, 1020 * 2)
box_width, box_height = box_size
scale_x = box_width / img.width
scale_y = box_height / img.height
scale = min(scale_x, scale_y)

# リサイズ後の大きさを計算する。
new_width = int(img.width * scale)
new_height = int(img.height * scale)

img_resized = img.resize((new_width, new_height), Image.LANCZOS)
img_resized.save(filePath + ".pdf", 'PDF')

win32api.ShellExecute(0, "print", filePath + ".pdf", None, ".", 0)

#印刷したファイルを削除
os.remove(filePath)
