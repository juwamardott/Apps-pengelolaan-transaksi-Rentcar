/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./index.php", "./app/**/*.php", "./layouts/**/*.php"],
  theme: {
    extend: {
      fontFamily: {
        hero: ["Quicksand"],
      },
      animation: {
        "spin-slow": "spin 15s linear infinite",
        "spin-slow2": "spin 25s linear infinite",
      },
    },
  },
  plugins: [],
};
