// Load the AWS SDK for Node.js
const AWS = require('aws-sdk');

const credentials={
    id:"AKIAXIB6BRAC2TAAFAFP",
    secret:"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"
}

// Set region
AWS.config.update({region: 'us-east-1'});
AWS.config.accessKeyId=credentials.id;
AWS.config.secretAccessKey=credentials.secret;

// Create publish parameters
var paramsOn = {
  Message: 'Lampada 1 ligada', /* required */
  PhoneNumber: '+5519981858526',
};
var paramsOff = {
    Message: 'Lampada 1 desligada', /* required */
    PhoneNumber: '+5519981858526',
  };

// Create promise and SNS service object
var publishTextPromiseOn = new AWS.SNS().publish(paramsOn).promise();
var publishTextPromiseOff = new AWS.SNS().publish(paramsOff).promise();




function sendSMSON() {
    // Handle promise's fulfilled/rejected states
    publishTextPromiseOn.then(function (data) {
        console.log("MessageID is " + data.MessageId);
    }).catch(function (err) {
        console.error(err, err.stack);
    });
}
function sendSMSOff() {
    // Handle promise's fulfilled/rejected states
    publishTextPromiseOff.then(function (data) {
        console.log("MessageID is " + data.MessageId);
    }).catch(function (err) {
        console.error(err, err.stack);
    });
}


sendSMSON(paramsOn);