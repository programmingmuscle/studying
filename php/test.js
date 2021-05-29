const trafficLight = {
    blue: 'go',
    yellow: 'stop',
    red: 'neccesary stop',
    greet: function(hoge) {
        console.log(this.yellow);
        console.log(hoge);
    }
};
trafficLight.blue='hoge';
trafficLight.enemy = 'kuso';

const {blue, red} = trafficLight;
console.log(trafficLight['yellow']);
console.log(blue);
console.log(red);
console.log(trafficLight);
delete trafficLight.enemy;
console.log(trafficLight);
trafficLight.greet('kusokuso');

setTimeout(() => {
    console.log('呼んだ？');
}, 1000);

const members = ['momo', 'dog', 'monkey', 'bird'];

function addRespect(hoge) {
    console.log(hoge + 'san');
}

members.forEach(addRespect);

members.forEach((member) => {
    console.log(member + 'san');
});

console.log(members.length);
console.log(members.slice(1));
console.log(members.slice(-1));
console.log(members.slice(0,2));

console.log(members.push('cat'));
console.log(members);