// Generated using webpack-cli https://github.com/webpack/webpack-cli

const path = require('path');

const HtmlWebpackPlugin = require('html-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const CopyWebpackPlugin = require('copy-webpack-plugin');

const isProduction = process.env.NODE_ENV == 'production';

const stylesHandler = MiniCssExtractPlugin.loader;

const pages = ['components', 'index', 'audit', 'alexandr', 'blog', 'article'];
const plugins = [];

/*
pages.forEach(page => {
    plugins.push(
        new HtmlWebpackPlugin({
            filename: `${page}.html`,
            template: path.resolve(`src/templates/${page}.pug`),
            minify: false
        }),
    )
});
*/

const config = {
    entry: './src/index.js',
    output: {
        path: path.resolve(__dirname, 'assets'),
    },
    devServer: {
        open: true,
        host: 'localhost',
    },
    plugins: [
        //...plugins,
        new MiniCssExtractPlugin(),

        new CopyWebpackPlugin({
            patterns: [
               { from: path.resolve(__dirname, 'src') + '/assets/images', to: `images` },
               { from: path.resolve(__dirname, 'src') + '/assets/icons', to: `images` }
            ]
        }),

        // Add your plugins here
        // Learn more about plugins from https://webpack.js.org/configuration/plugins/
    ],
    module: {
        rules: [
            {
                test: /\.(js|jsx)$/i,
                loader: 'babel-loader',
            },
            {
                test: /\.pug$/,
                include: path.resolve(__dirname, 'src/templates/'),
                use: [
                    {
                        loader: "pug-loader",
                        options: {
                            pretty: true
                        }
                    }
                ]
            },
            {
                test: /\.css$/i,
                use: [stylesHandler,'css-loader'],
            },
            {
                test: /\.s[ac]ss$/i,
                use: [
                    {
                        loader: stylesHandler
                    },
                    {
                        loader: 'css-loader'
                    }, {
                        loader: 'sass-loader',
                        options: {
                            sourceMap: true
                        }
                    }
                ]
            },
            {
                test: /\.(png|svg|jpg|jpeg|gif)$/i,
                type: 'asset/resource',
                generator: {
                    filename: 'images/[name][ext][query]'
                }
            },
            {
                test: /\.(eot|ttf|woff|woff2)$/i,
                type: 'asset',
                generator: {
                    filename: 'fonts/[name][ext][query]'
                }
            }

            // Add your rules for custom modules here
            // Learn more about loaders from https://webpack.js.org/loaders/
        ],
    },
};

module.exports = () => {
    if (isProduction) {
        config.mode = 'production';
        
        
    } else {
        config.mode = 'development';
    }
    return config;
};
