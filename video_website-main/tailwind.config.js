// tailwind.config.js
module.exports = {
    // Specify the paths to all of your template files
    content: [
      "./src/**/*.{html,js}", // Adjust this to where your templates are located
    ],
    theme: {
      extend: {
        // You can add custom theme configurations here
        colors: {
          primary: '#3490dc',
          secondary: '#ffed4a',
          accent: '#38b2ac',
        },
        spacing: {
          '128': '32rem',
          '144': '36rem',
        },
        fontFamily: {
          custom: ['Inter', 'sans-serif'],
        },
      },
    },
    plugins: [
      // You can add Tailwind plugins here if needed
    ],
  }
  