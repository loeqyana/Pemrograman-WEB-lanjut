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