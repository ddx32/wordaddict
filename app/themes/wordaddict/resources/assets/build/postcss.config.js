/* eslint-disable */

const cssnanoConfig = {
  preset: ['default', { discardComments: { removeAll: true } }]
};

module.exports = ({ file, options }) => {
  return {
    parser: options.enabled.optimize ? 'postcss-safe-parser' : undefined,
    plugins: {
      cssnano: options.enabled.optimize ? cssnanoConfig : false,
      autoprefixer: {
        add: true,
        browsers: [
          'last 10 versions',
          'android 4',
          'opera 12',
          'ie 9'
        ]
      },
    },
  };
};