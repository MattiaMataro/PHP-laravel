const path = require('path');

module.exports = {
  entry: './src/index.js',
  mode: "development",
  module: {
    rules: [
      {
        test: /\.m?js$/,
        exclude: /node_modules/,
        use: [
          {loader: "babel-loader"},
          {loader: "prettier-loader"},
        ]
      }
    ]
  },
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: 'bundle.js',
  },
};