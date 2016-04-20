var webpack = require('webpack');

module.exports = {
    entry: {
    	main: "./src/js/main"
    },
    output: {
        path: __dirname + "/dist/js",
        filename: "bundle.js"
    },
    module: {
		loaders: [
			{
				test: /\.js$/,
				loader: 'babel',
				query: {
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
