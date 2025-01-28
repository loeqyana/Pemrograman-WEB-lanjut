function cetakAngka() {
    for (let i = 1; i <= 5; i++) {
        setTimeout(function () {
            console.log(i);
        }, i * 1000);
    }
}

cetakAngka(); 

//-kode yang belum diubah akan menjumlahkan angka 5 dengan simbol ++ yang berarti 1 .
//  dan tidak dapat berhitung seperti halnya (1,2,3)

//- penggunaan 'let' pada baris kedua akan mempengaruhi konsep berhitung yang ada di console.
//  sehingga console dapat berhitung secara berurutan sesuai dengan urutan angkanya.
//  karena konsep let yang dapat diubah nilainya maka ini sangat cocok digunakan pada sesi ini.

async function fetchData() {
    return new Promise((resolve, reject) => {
      setTimeout(() => {
        console.log('Data fetched');
        resolve({ data: 'Some data' });
      }, 2000);
    });
  }
  
  async function processData(data) {
    return new Promise((resolve, reject) => {
      setTimeout(() => {
        console.log('Processing data:', data);
        resolve(`Processed: ${data.data}`);
      }, 2000);
    });
  }
  
  async function saveData(processedData) {
    return new Promise((resolve, reject) => {
      setTimeout(() => {
        console.log('Data saved:', processedData);
        resolve('Success');
      }, 2000);
    });
  }
  
  async function main() {
    try {
      const fetchedData = await fetchData(); // await untuk pengambilan data
      const processedData = await processData(fetchedData); // await untuk pemrosesan data
      const result = await saveData(processedData); // await untuk menyimpan data
      console.log('All operations completed:', result);
    } catch (error) {
      console.error('Error:', error);
    }
  }
  
  main();
  
// penggunaan asnyc/await membuat kode menjadi :
//  - lebih mudah dipahami
//  - lebih sederhana dalam memanajemen kesalahan, serta
//  - operasi asinkron yang lebih kompleks pada metode callback
