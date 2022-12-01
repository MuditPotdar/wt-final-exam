function reverseNum(n){
    let r = n.toString().split("").reverse().join("");
    return Math.sign(n)*parseInt(r);
}
//reverseNum(-167);
console.log(reverseNum(56));