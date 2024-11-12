/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/*.{html,js}"],
  theme: {
    extend: {
      fontFamily: {
        poppins: "Poppins",
      },
      colors: {
        dark: "#000",
        light: "#fff",
      },
      // gridTemplateRows: {
      
      //   16: "repeat(2, minmax(0, 1fr))",
        
      //   layout: "200px minmax(900px, 1fr) 100px",
      // },
    },
  },
  plugins: [],
};
