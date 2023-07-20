const webpack = require('webpack');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const CssMinimizerPlugin = require("css-minimizer-webpack-plugin");

module.exports = {
    mode: process.env.NODE_ENV === 'development' ? 'development' : 'production',
    devtool: 'source-map',
    entry: {
        main: {
            import: './main.js',
        },
    },
    output: {
        path: '/var/www/localhost/htdocs/opencart/4.0.2.1/extension/ol/catalog/view/javascript/',
        library: "map"
    },
    plugins: [new MiniCssExtractPlugin()],
    module: {
        rules: [
            {
                test: /\.css$/i,
                use: [MiniCssExtractPlugin.loader, "css-loader"],
            },
        ],
    },
    optimization: {
        minimizer: [
            // For webpack@5 you can use the `...` syntax to extend existing minimizers (i.e. `terser-webpack-plugin`), uncomment the next line
            `...`,
            new CssMinimizerPlugin(),
        ],
    }
};
