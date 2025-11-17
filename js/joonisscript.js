//sirge joon
function sirgejoon() {
    //mأ¤أ¤rame tahvli
    const  tahvel=document.getElementById('tahvel');
    if(tahvel.getContext){
        let t=tahvel.getContext('2d'); //anname tahvlinimi on t
        //joon
        t.beginPath();
        t.strokeStyle="red";
        t.lineWidth = 1;
        t.moveTo(50,100); //alguspunkt
        t.lineTo(150,200); //lأµppppunkt
        t.stroke();
    }
}
//kolmnurk
function kolmnurk() {
    //mأ¤أ¤rame tahvli
    const  tahvel=document.getElementById('tahvel');
    if(tahvel.getContext){
        let t=tahvel.getContext('2d'); //anname tahvlinimi on t
        //joon
        t.beginPath();
        t.strokeStyle="red";
        t.fillStyle="white"; //taust
        t.lineWidth = 1;
        t.moveTo(50,100); //alguspunkt
        t.lineTo(150,100);
        t.lineTo(150,200);
        t.lineTo(50,100); //lأµppppunkt
        t.stroke();
        t.fill();
    }
}
function puhasta() {
    //mأ¤أ¤rame tahvli
    const  tahvel=document.getElementById('tahvel');
    if(tahvel.getContext){
        let t=tahvel.getContext('2d');
        t.clearRect(0,0,300,250);
    }
}
//ring
function ring() {
    //mأ¤أ¤rame tahvli
    const  tahvel=document.getElementById('tahvel');
    let r=document.getElementById('raadius');
    if(tahvel.getContext){
        let t=tahvel.getContext('2d'); //anname tahvlinimi on t
        //ring
        t.beginPath();
        t.strokeStyle="yellow";
        t.lineWidth = 1;
        t.arc(50,50, r.value, 0, 2*Math.PI, true); // x, y, r
        t.stroke();
        //ring
        t.beginPath();
        t.strokeStyle="yellow";
        t.lineWidth = 1;
        t.arc(50,120, r.value, 0, 2*Math.PI, true); // x, y, r
        t.fill()
        //ring
    }
}
function ristk6lik() {
    //mأ¤أ¤rame tahvli
    const  tahvel=document.getElementById('tahvel');
    let laius=document.getElementById('laius');
    let korgus=document.getElementById('korgus');
    if(tahvel.getContext){
        let t=tahvel.getContext('2d');
        t.fillStyle="red";
        t.fillRect(50,30,laius.value,korgus.value,);
    }
}
function pilt(){
    const  tahvel=document.getElementById('tahvel');
    if(tahvel.getContext){
        let t=tahvel.getContext('2d');

        const fail=new Image();
        fail.src="https://picsum.photos/200/300"
        t.drawImage(fail, 50, 50, 100, 200)
    }

}
function foor() {
    //mأ¤أ¤rame tahvli
    const  tahvel=document.getElementById('tahvel');

    if(tahvel.getContext){
        let t=tahvel.getContext('2d');
        t.strokeStyle="black";
        t.strokeRect(50,30,100,200);
        t.beginPath();
        t.strokeStyle="black";
        t.fillStyle="black";
        t.lineWidth = 1;
        t.arc(100,60, 25, 0, 2*Math.PI, true); // x, y, r
        t.stroke();
        t.fill()
        t.beginPath();
        t.strokeStyle="black";
        t.fillStyle="black";
        t.lineWidth = 1;
        t.arc(100,130, 25, 0, 2*Math.PI, true); // x, y, r
        t.stroke();
        t.fill()
        t.beginPath();
        t.strokeStyle="black";
        t.fillStyle="black";
        t.lineWidth = 1;
        t.arc(100,200, 25, 0, 2*Math.PI, true); // x, y, r
        t.stroke();
        t.fill()
    }
}
function oota() {
    //mأ¤أ¤rame tahvli
    const  tahvel=document.getElementById('tahvel');

    if(tahvel.getContext){
        let t=tahvel.getContext('2d');
        t.strokeStyle="black";
        t.strokeRect(50,30,100,200);
        t.beginPath();
        t.strokeStyle="black";
        t.fillStyle="black";
        t.lineWidth = 1;
        t.arc(100,60, 25, 0, 2*Math.PI, true); // x, y, r
        t.stroke();
        t.fill()
        t.beginPath();
        t.strokeStyle="yellow";
        t.fillStyle="yellow";
        t.lineWidth = 1;
        t.arc(100,130, 25, 0, 2*Math.PI, true); // x, y, r
        t.stroke();
        t.fill()
        t.beginPath();
        t.strokeStyle="black";
        t.fillStyle="black";
        t.lineWidth = 1;
        t.arc(100,200, 25, 0, 2*Math.PI, true); // x, y, r
        t.stroke();
        t.fill()
    }
}
function minne() {
    //mأ¤أ¤rame tahvli
    const  tahvel=document.getElementById('tahvel');

    if(tahvel.getContext){
        let t=tahvel.getContext('2d');
        t.strokeStyle="black";
        t.strokeRect(50,30,100,200);
        t.beginPath();
        t.strokeStyle="black";
        t.fillStyle="black";
        t.lineWidth = 1;
        t.arc(100,60, 25, 0, 2*Math.PI, true); // x, y, r
        t.stroke();
        t.fill()
        t.beginPath();
        t.strokeStyle="black";
        t.fillStyle="black";
        t.lineWidth = 1;
        t.arc(100,130, 25, 0, 2*Math.PI, true); // x, y, r
        t.stroke();
        t.fill()
        t.beginPath();
        t.strokeStyle="green";
        t.fillStyle="green";
        t.lineWidth = 1;
        t.arc(100,200, 25, 0, 2*Math.PI, true); // x, y, r
        t.stroke();
        t.fill()
    }
}
function seisa() {
    //mأ¤أ¤rame tahvli
    const  tahvel=document.getElementById('tahvel');

    if(tahvel.getContext){
        let t=tahvel.getContext('2d');
        t.strokeStyle="black";
        t.strokeRect(50,30,100,200);
        t.beginPath();
        t.strokeStyle="red";
        t.fillStyle="red";
        t.lineWidth = 1;
        t.arc(100,60, 25, 0, 2*Math.PI, true); // x, y, r
        t.stroke();
        t.fill()
        t.beginPath();
        t.strokeStyle="black";
        t.fillStyle="black";
        t.lineWidth = 1;
        t.arc(100,130, 25, 0, 2*Math.PI, true); // x, y, r
        t.stroke();
        t.fill()
        t.beginPath();
        t.strokeStyle="black";
        t.fillStyle="black";
        t.lineWidth = 1;
        t.arc(100,200, 25, 0, 2*Math.PI, true); // x, y, r
        t.stroke();
        t.fill()
    }
}
function eestilipp() {
    const lipp = document.getElementById('lipp');
    if (lipp.getContext) {
        let l = lipp.getContext('2d');
        l.fillStyle = 'blue';
        l.fillRect(0,0,330,70);
        l.fillStyle = 'black';
        l.fillRect(0,70,330,70);
        l.fillStyle = 'white';
        l.fillRect(0,140,330,70);
    }
}
function prantsusmaa() {
    const lipp = document.getElementById('lipp');
    if (lipp.getContext) {
        let l = lipp.getContext('2d');
        l.fillStyle = 'blue';
        l.fillRect(0, 0, 110, 210);
        l.fillStyle = 'white';
        l.fillRect(110, 0, 220, 210);
        l.fillStyle = 'red';
        l.fillRect(220, 0, 330, 210);
    }
}
function saksamaalipp() {
    const lipp = document.getElementById('lipp');
    if (lipp.getContext) {
        let l = lipp.getContext('2d');
        l.fillStyle = 'black';
        l.fillRect(0,0,330,70);
        l.fillStyle = 'red';
        l.fillRect(0,70,330,70);
        l.fillStyle = 'yellow';
        l.fillRect(0,140,330,70);
    }
}
function belgialipp() {
    const lipp = document.getElementById('lipp');
    if (lipp.getContext) {
        let l = lipp.getContext('2d');
        l.fillStyle = 'black';
        l.fillRect(0, 0, 110, 210);
        l.fillStyle = 'yellow';
        l.fillRect(110, 0, 220, 210);
        l.fillStyle = 'red';
        l.fillRect(220, 0, 330, 210);
    }
}
function kanadalipp() {
    const lipp = document.getElementById('lipp');
    if (lipp.getContext) {
        let l = lipp.getContext('2d');
        l.fillStyle = 'red';
        l.fillRect(0, 0, 110, 210);
        l.fillStyle = 'white';
        l.fillRect(110, 0, 220, 210);
        l.fillStyle = 'red';
        l.fillRect(220, 0, 330, 210);

        const fail=new Image();
        fail.src="image/vahtraleht.jpg"
        fail.onload = () => {
            l.drawImage(fail, 110, 30, 100, 150)
        }
    }

}