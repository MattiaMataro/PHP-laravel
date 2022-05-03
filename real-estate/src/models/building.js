export class Building {
  constructor(id, type, name, description, address, geo) {
    this.address = address;
    this.description = description;
    this.geo = geo;
    this.id = id;
    this.name = name;
    this.type = type;
  }
}
