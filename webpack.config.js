var webpack = require('webpack');

module.exports = {
    entry: {
    	main: "./src/js/main"
    },
    output: {
        path: __dirname + "/dist/js",
        filename: "bundle.js"
    },
    plugins: [
        new webpack.ProvidePlugin({
            $: "jquery",
            jquery: "jQuery",
            "windows.jQuery": "jquery"
        }), 

    ],
    module: {
		loaders: [
			{
				test: /\.js$/,
				loader: 'babel',
				query: {
					plugins: ['transform-decorators-legacy'],
					presets: ['es2015']
				}
			},
			{ 
				test: require.resolve("jquery"), 
				loader: "expose?$!expose?jQuery" 
			}
		]
	}
}
