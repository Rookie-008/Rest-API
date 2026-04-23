let xhr = new XMLHttpRequest();
xhr.onreadystatechange = function () {
    if (xhr.readystate == 4 && xhr.status == 200) {
        //let product = this.responseText;
        let product = JSON.parse(this.responseText);
        console.log(product);
    }
}

xhr.open('GET','data2.json',true);
xhr.send()
