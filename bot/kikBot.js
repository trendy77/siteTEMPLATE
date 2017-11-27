'use strict';

let util = require('util');
let http = require('http');
let Bot  = require('@kikinteractive/kik');

// Configure the bot API endpoint, details for your bot
let bot = new Bot({
    username: 'biancabityyy',
    apiKey: '950ae81b-8594-48b2-94c4-5b36a2b5a123',
    baseUrl: 'https://trendypublishing.com.au/bot/kikbot.php'
});
bot.updateBotConfiguration();

bot.onTextMessage((message, next) => {
    const userState = getUserState(message.from);
    if (!userState.inIntroState) {
        // Send the user the intro state
       

        return;
    }

    // Allow the next handler take over
    next();
});
bot.onTextMessage((message,next) => {
    searchFor(message.body)
        .then((result) => {
            message.reply(result);
        });
	
	next();
});
bot.onTextMessage((message) => {
    searchFor(message.body)
        .then((result) => {
            message.reply(result);
        });
});

// Set up your server and start listening
let server = http
    .createServer(bot.incoming())
    .listen(process.env.PORT || 8080);