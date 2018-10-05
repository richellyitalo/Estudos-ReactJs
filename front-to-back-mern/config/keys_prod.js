module.exports = {
  mongo: {
    uri: proccess.env.MONGO_URI,
    user: proccess.env.MONGO_USER,
    password: proccess.env.MONGO_PASSWORD,
    dbName: proccess.env.MONGO_DB_NAME
  },
  secretOrKey: proccess.env.SECRET_OR_KEY
};