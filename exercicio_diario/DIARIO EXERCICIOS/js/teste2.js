async function a() {
    b();
    await c();
    await d();
    alertUser("a");
  }
  
  function b() {
    alertUser("b");
    return;
    
  }
  
  async function c() {
    await new Promise((resolve) => {
      resolve();
      alertUser('c');
    });
  }
  
  async function d() {
    await new Promise((resolve) => {
      alertUser('d');
      resolve();
    });
  }
  
  function alertUser(message) {
    console.log('A função é: ' + message);
  }
    a();