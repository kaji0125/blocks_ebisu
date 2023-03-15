module.exports = {
  // モード値を production に設定すると最適化された状態で、
  // development に設定するとソースマップ有効でJSファイルが出力される
  mode: 'production',

  // メインとなるJavaScriptファイル（エントリーポイント）
  entry: {
    lp: './src/lp.js',
    index: './src/top.js',
    script: './src/script.js',
  },
  // ファイルの出力設定
  output: {
    //  出力ファイルのディレクトリ名
    path: `${__dirname}/dist`,
    // 出力ファイル名
    filename: '[name].js'
  },
  module: {
    rules: [{
      // 拡張子 .js の場合
      test: /\.js$/,
      exclude: /node_modules\/(?!(dom7|ssr-window|swiper)\/).*/,
      use: [{
        // Babel を利用する
        loader: 'babel-loader',
        // Babel のオプションを指定する
        options: {
          presets: [
            // プリセットを指定することで、ES2020 を ES5 に変換
            '@babel/preset-env',
          ]
        }
      }],
		test: /\.css$/i,
      use: ["style-loader", "css-loader"],
    }]
  },
  // ES5(IE11等)向けの指定
  target: ["web", "es5"],
};
