const path = require('path');

module.exports = {
    entry: './assets/app',
    output: {
        path: path.resolve(__dirname, 'dist'),
        filename: 'app_bundle.js'
    }
};