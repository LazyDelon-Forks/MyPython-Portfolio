## 📣 此專案尚在開發中 (大學專題)

**此網址版面與執行端有所差異，不確定是否是 pythonanywhere 託管的問題。**
**但功能完整，若覺得網址介面太亂 建議下載檔案自行執行**

➤  **網址：** [**Finance Web**](https://zxc884162.pythonanywhere.com/)




## 📋 網頁實際頁面


## **1. Home Page 首頁**

### **首頁主要透過 Flask 與 Bootstrap 進行建置。**

&nbsp; <img src="./Images/Home.png" alt="Home" style="width:1200px"/>




## **2. Finance Report 財報**

### **此網頁財報數值 主要是參考各大平台 例如：財報狗、玩股網、公開觀測站...等財報網站，再由爬蟲將公開觀測站的財報進行抓取、轉檔...等資料處理，透過爬蟲所抓取的財報數值，自行進行計算 與 驗證。**

&nbsp; <img src="./Images/Finance Report.png" alt="Finance Report" style="width:1200px"/>





## **3. Finance Category 類別**

### **此類別主要是想提供機器學習比較使用者所選類別進行比較。**

### **提問：請問為何要同樣類別進行比較呢？不同類別不能擺在一起比較嗎？**

### **回答：同類別進行比較出來的值會比較貼近，比如說金融業 會缺少某些值，那難道金融業的股票就不推薦嗎。很顯然不適，所以此網站主要類別還是提供使用者觀看財報或是給機器學習使用**

&nbsp; <img src="./Images/Finance Category.png" alt="Finance Category" style="width:1200px"/>




**4. 機器學習**

### **點選機器學習時可以向其他財報網站依樣進行智慧選股的部分，主要透過某幾個財報指標來進行數值的分析，以提供後續正負樣本的檔案**

&nbsp; <img src="./Images/Finance ML.png" alt="Finance ML" style="width:1200px"/>




**5. 正負樣本**

### **當正負樣本檔案出來後 執行黨會自動執行 SVM 進行判別 並透過 決策數給予優良公司的名單與解釋。**

&nbsp; <img src="./Images/Positive and negative samples.png" alt="Positive and negative samples" style="width:1200px"/>
