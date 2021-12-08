
import datetime
import time
from selenium import webdriver
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.by import By



CHROME_PROFILE_PATH = "user-data-dir= /home/dhifaf/.config/google-chrome/Default"
options = webdriver.ChromeOptions()
options.add_argument(CHROME_PROFILE_PATH)


driver = webdriver.Chrome(executable_path='/usr/bin/chromedriver',options=options)
driver.maximize_window()
driver.get('https://web.whatsapp.com/')

name = "KASRA V (Happy Life)"
# name = "0000AAAAA"
# name = "Agus Asrama"

# count = 5
# wait = WebDriverWait(driver = driver, timeout = 10900)

# user = WebDriverWait(driver, 20).until(EC.element_to_be_clickable((By.CSS_SELECTOR, "div[role='textbox'] span[title='{}']".format(name)))).click()
# time.sleep(5)
# <span dir="auto" title="KASRA V (Happy Life)" class="emoji-texttt _ccCW FqYAR i0jNr">KASRA V (Happy Life)</span>

# msg = ["Assalamu'alaikum, selamat subuh kk asrama, berikut link presensi untuk kegiatan peribadatan yh baik muslim dan non muslim : ", "-> https://forms.gle/yYKwWL6QeUyHHwUs9 | ", "Biar ga tenggelam juga, ini link presensi adik-adiknya yah", "-> TB 2 : https://bit.ly/PresensiSubuhanTB2 | ", "-> TB 3 : https://bit.ly/PresensiSubuhanTB3 | ", "-> TB 1 : https://bit.ly/PresensiIbadahAdikAsrama2021 | "]
# msg = """"
# Assalamu'alaikum, selamat subuh kk" asrama, berikut link presensi untuk kegiatan peribadatan yh baik muslim dan non muslim :
# https://forms.gle/yYKwWL6QeUyHHwUs9
# Biar ga tenggelam juga, ini link presensi adik-adiknya yah...
# TB 2 : https://bit.ly/PresensiSubuhanTB2
# TB 3 : https://bit.ly/PresensiSubuhanTB3
# TB 1 : https://bit.ly/PresensiIbadahAdikAsrama2021 
# """

msg_info = "Dikirimkan oleh bot_subuh_2021,  pukul {}".format(datetime.datetime.now().strftime("%H:%M:%S"))

user_xpath ='//div[@contenteditable="true"][@data-tab="3"]'

user = WebDriverWait(driver, 700).until(
        EC.presence_of_element_located((By.XPATH, user_xpath))
)
user.send_keys(name)
time.sleep(10)
group_xpath = '//span[@title="{}"]'.format(name)
group = driver.find_element_by_xpath(group_xpath)
group.click()

time.sleep(5)

# for i in msg:
#         
#         msg_box.send_keys(i)
#         time.sleep(6)
#         msg_box.send_keys(Keys.SHIFT + Keys.ENTER)
#         time.sleep(1)
#         msg_box.send_keys(Keys.SHIFT + Keys.ENTER)
#         time.sleep(1)
#         msg_box.send_keys(Keys.SHIFT + Keys.ENTER)
#         time.sleep(1)
#         msg_box.send_keys(Keys.SHIFT + Keys.ENTER)
# msg_box.send_keys("Assalamu'alaikum, selamat subuh semua kakak asrama, berikut link presensi untuk kegiatan peribadatan yh baik muslim dan non muslim :" + Keys.SHIFT + Keys.ENTER + 
# "https://forms.gle/yYKwWL6QeUyHHwUs9" + Keys.SHIFT + Keys.ENTER + 
# "Biar ga tenggelam juga, ini link presensi adik-adiknya yah..." + Keys.SHIFT + Keys.ENTER + 
# "TB 2 : https://bit.ly/PresensiSubuhanTB2" + Keys.SHIFT + Keys.ENTER + 
# "TB 3 : https://bit.ly/PresensiSubuhanTB3" + Keys.SHIFT + Keys.ENTER + 
# "TB 1 : https://bit.ly/PresensiIbadahAdikAsrama2021 " + Keys.SHIFT + Keys.ENTER)

msg_box = driver.find_element_by_class_name('p3_M1')
msg_box.send_keys("Assalamu'alaikum, selamat subuh kk asrama, berikut link presensi untuk kegiatan peribadatan yh baik muslim dan non muslim : " + Keys.SHIFT + Keys.ENTER)
time.sleep(15)
msg_box.send_keys("-> TB 1 : https://bit.ly/PresentTB1  " + Keys.SHIFT + Keys.ENTER)
time.sleep(10)
msg_box.send_keys("-> TB 2 : https://bit.ly/PresentTB2  " + Keys.SHIFT + Keys.ENTER)
time.sleep(10)
msg_box.send_keys("-> TB 3 : https://bit.ly/PresentTB3  " + Keys.SHIFT + Keys.ENTER)
time.sleep(10)
msg_box.send_keys("Biar ga tenggelam juga, ini link presensi adik-adiknya yah..." + Keys.SHIFT + Keys.ENTER)
time.sleep(10)
msg_box.send_keys("-> TB 2 : https://bit.ly/PresensiSubuhanTB2  " + Keys.SHIFT + Keys.ENTER)
time.sleep(7)
msg_box.send_keys("-> TB 3 : https://bit.ly/PresensiSubuhanTB3  " + Keys.SHIFT + Keys.ENTER)
time.sleep(7)
msg_box.send_keys("-> TB 1 : https://bit.ly/PresensiIbadahAdikAsrama2021  " + Keys.SHIFT + Keys.ENTER)
time.sleep(7)
msg_box.send_keys(Keys.ENTER)
time.sleep(10)
msg_box.send_keys(msg_info, Keys.ENTER)


# for i in range(count):
#     msg_box.send_keys(msg, Keys.ENTER)
#     time.sleep(2)

